<?php

namespace Bolt\Extension\Bolt\RSSAggregator;

use PicoFeed\Reader\Reader;

/**
 * RSS Aggregator Extension for Bolt
 *
 * @author Sebastian Klier <sebastian@sebastianklier.com>
 * @author Gawain Lynch <gawain.lynch@gmail.com>
 */
class Extension extends \Bolt\BaseExtension
{
    const NAME = 'RSSAggregator';

    public function getName()
    {
        return Extension::NAME;
    }

    /**
     * Initialize RSS Aggregator
     */
    public function initialize()
    {

        $path = $this->app['config']->get('general/branding/path') . '/rssaggregate';
        $this->app->match($path, array($this, "RSSAggregator"));

    }

    public function RSSAggregator()
    {

        if (!empty($this->config['key']) && ($this->config['key'] !== $_GET['key'])) {
            return "Key not correct.";
        }

        $cachedir = $this->app['resources']->getPath('cache') . '/rssaggregator/';

        // \Dumper::dump($this->config['feeds']);

        echo '<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><pre>';

        foreach ($this->config['feeds'] as $author => $feed) {
            $this->parseFeed($author, $feed);
        }

        return "<br><br><br> Done.";
    }


    private function parseFeed($author, $feed)
    {

        $contenttype = $this->config['contenttype'];

        $reader = new Reader;
        $resource = $reader->download($feed['feed']);

        // Return the right parser instance according to the feed format
        $parser = $reader->getParser(
            $resource->getUrl(),
            $resource->getContent(),
            $resource->getEncoding()
        );

        // Return a Feed object
        $feeditems = $parser->execute();

        // Print the feed properties with the magic method __toString()

        // slice
        $items = array_slice($feeditems->items, 0, $this->config['itemAmount']);

        foreach ($items as $item) {

            //echo "<hr>\n";
            //echo " - " .$item->getTitle() . "<br>\n - " . \Bolt\Helpers\String::slug( $item->getTitle() ) . "\n";

            // try to get an existing record for this item
            $record = $this->app['storage']->getContent(
                $contenttype, array(
//                    'itemid' => $item->getId(),
                    'slug' => \Bolt\Helpers\String::slug( $item->getTitle() ),
                    'returnsingle' => true, 
                    // 'printquery' => true
                ) );

            if (!$record) {
                // New one.
                $record = $this->app['storage']->getContentObject($contenttype);
                echo "\n<b>[NEW]</b> ";
                $new = true;
            } else {
                echo "\n<b>[UPD]</b> : " . $record->values['id'] ;
                $new = false;
            }

            $date = new \DateTime("@" . $item->getDate());

            if ($item->getContent() != false) {
                $raw = $item->getContent();
            } else {
                $raw = $item->getIntro();
            }


            // Sanitize/clean the HTML.
            $maid = new \Maid\Maid(
                array(
                    'output-format' => 'html',
                    'allowed-tags' => array( 'p', 'br', 'hr', 's', 'u', 'strong', 'em', 'i', 'b', 'li', 'ul', 'ol', 'menu', 'blockquote', 'pre', 'code', 'tt', 'h2', 'h3', 'h4', 'h5', 'h6', 'dd', 'dl', 'dh', 'table', 'tbody', 'thead', 'tfoot', 'th', 'td', 'tr', 'a', 'img'),
                    'allowed-attribs' => array('id', 'class', 'name', 'value', 'href', 'src')
                )
            );
            $content = $maid->clean($raw);

            // if ($item->getImage() != "") {
            //     $image = $item->getImage();
            // } else {
            $image = $this->findImage($content, $feed['url']);
            // }

            $values = array(
                'itemid' => $item->getId(),
                'title' => "" . $item->getTitle(),
                'raw' => "" . $raw,
                'body' => "" . $content,
                // 'source' => "" . $item->getSource(),
                'author' => $author,
                'image' => $image,
                'status' => 'published',
                'sitetitle' => $feed['title'],
                'sitesource' => $feed['url']
            );

            // echo "<img src='".$image['file']."' width='200'>";

            if ($new || $date instanceof \DateTime) {
                echo "[1]";
                $values['datecreated'] = ($date instanceof \DateTime) ? $date->format('Y-m-d H:i:s') : "";
                $values['datepublish'] = ($date instanceof \DateTime) ? $date->format('Y-m-d H:i:s') : "";
            } else {
                dump($date);
                echo "[2]";
            }

            // $record->setTaxonomy('tags', $item->getTags());
            // $record->setTaxonomy('authors', $author);
            $record->setValues($values);
            
            $id = $this->app['storage']->saveContent($record);

            echo " - " . $values['datecreated'] . " / " . $values['title'];

            flush();

        }

    }


    private function findImage($html, $baseurl)
    {
        $doc = new \DOMDocument();
        @$doc->loadHTML($html);

        $tags = $doc->getElementsByTagName('img');

        foreach ($tags as $tag) {
            // Skip feedburner images..
            if (strpos($tag->getAttribute('src'), "feedburner.com") > 0) {
                continue;
            }
            if (strpos($tag->getAttribute('src'), "flattr.com") > 0) {
                continue;
            }

            $image = $tag->getAttribute('src');

            if (strpos($image, "http") === false) {
                $baseurl = parse_url($baseurl);
                $image = $baseurl['scheme'] . "://" . $baseurl['host'] . $image;
            }

            // echo "<p><img src='$image' width='100' height='100'/>";

            return array('file' => $image);
            // echo $tag->getAttribute('src') . "<br>\n";
            // printf("<img src='%s' widht='100'>", $tag->getAttribute('src'));
        }

        return null;

    }

}
