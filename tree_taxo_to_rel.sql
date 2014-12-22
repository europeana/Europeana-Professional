DELETE FROM bolt_relations WHERE to_contenttype = 'structures';

REPLACE INTO bolt_relations (from_contenttype, from_id, to_contenttype, to_id)
SELECT contenttype, content_id, 'structures', (SELECT id FROM bolt_structures s WHERE s.slug = t.slug)
    FROM bolt_taxonomy t
    WHERE t.taxonomytype = 'tree'
