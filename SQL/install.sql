INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES
('Maximum Display of Recently Viewed Products', 'RECENT_VIEWED_PRODUCTS_MAXIMUM', '5', 'This sets the maximum number of recently viewed items a user can see in the sidebox.', 3, 900, NULL, NOW(), NULL, NULL);

INSERT INTO configuration_language (configuration_title, configuration_key, configuration_language_id, configuration_description, last_modified, date_added) VALUES 
('Maximale Anzahl kürzlich angesehener Artikel in der Sidebox', 'RECENT_VIEWED_PRODUCTS_MAXIMUM', '43', 'Wieviele kürzlich angesehene Artikel sollen dem Besucher maximal in der Sidebox angezeigt werden?', now(), now());
