-- insert
--     into bolt_relations (from_contenttype, to_contenttype, from_id, to_id)
--     select contenttype, 'structures', content_id, (select id from bolt_structures where slug = t.slug)
--         from bolt_taxonomy t
--         where t.taxonomytype = 'tree';

-- pages
update bolt_pages p
    set structure_sortorder =
            (
                select sortorder
                    from bolt_taxonomy t
                    where t.taxonomytype = 'tree'
                        and t.contenttype = 'pages'
                        and t.content_id = p.id
            );

-- blogposts
update bolt_blogposts p
    set structure_sortorder =
            (
                select sortorder
                    from bolt_taxonomy t
                    where t.taxonomytype = 'tree'
                        and t.contenttype = 'blogposts'
                        and t.content_id = p.id
            );

-- publications
update bolt_publications p
    set structure_sortorder =
            (
                select sortorder
                    from bolt_taxonomy t
                    where t.taxonomytype = 'tree'
                        and t.contenttype = 'publications'
                        and t.content_id = p.id
            );

-- pressreleases
update bolt_pressreleases p
    set structure_sortorder =
            (
                select sortorder
                    from bolt_taxonomy t
                    where t.taxonomytype = 'tree'
                        and t.contenttype = 'pressreleases'
                        and t.content_id = p.id
            );

-- events
update bolt_events p
    set structure_sortorder =
            (
                select sortorder
                    from bolt_taxonomy t
                    where t.taxonomytype = 'tree'
                        and t.contenttype = 'events'
                        and t.content_id = p.id
            );

-- projects
update bolt_projects p
    set structure_sortorder =
            (
                select sortorder
                    from bolt_taxonomy t
                    where t.taxonomytype = 'tree'
                        and t.contenttype = 'projects'
                        and t.content_id = p.id
            );

-- jobs
update bolt_jobs p
    set structure_sortorder =
            (
                select sortorder
                    from bolt_taxonomy t
                    where t.taxonomytype = 'tree'
                        and t.contenttype = 'jobs'
                        and t.content_id = p.id
            );

-- persons
update bolt_persons p
    set structure_sortorder =
            (
                select sortorder
                    from bolt_taxonomy t
                    where t.taxonomytype = 'tree'
                        and t.contenttype = 'persons'
                        and t.content_id = p.id
            );

-- taskforces
update bolt_taskforces p
    set structure_sortorder =
            (
                select sortorder
                    from bolt_taxonomy t
                    where t.taxonomytype = 'tree'
                        and t.contenttype = 'taskforces'
                        and t.content_id = p.id
            );

-- structures
update bolt_structures p
    set structure_sortorder =
            (
                select sortorder
                    from bolt_taxonomy t
                    where t.taxonomytype = 'tree'
                        and t.contenttype = 'structures'
                        and t.content_id = p.id
            );
