#########################################################################################
# Sidebox Kürzlich angesehene Artikel - UNINSTALL
# !!!! NUR AUSFÜHREN, WENN SIE DAS MODUL KOMPLETT ENTFERNEN WOLLEN !!!!
#########################################################################################

DELETE FROM configuration WHERE configuration_key = 'RECENT_VIEWED_PRODUCTS_MAXIMUM';
DELETE FROM configuration_language WHERE configuration_key = 'RECENT_VIEWED_PRODUCTS_MAXIMUM';