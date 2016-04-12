<?php

/*

Website Baker Project <http://www.websitebaker.org/>
Copyright (C) 2004-2008, Jürg Rast

Website Baker is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

Website Baker is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Website Baker; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/

//Modul Description
$module_description = 'Erstellen sie eine vollautomatische Bildergalerie mit Ordner als Kategorien';

//Variables for the Frontend
$MOD_FOLDERGALLERY['VIEW_TITLE']        = 'Billedgalleri';
$MOD_FOLDERGALLERY['CATEGORIES_TITLE']  = 'Kategori';
$MOD_FOLDERGALLERY['BACK_STRING']       = 'Tilbage';
$MOD_FOLDERGALLERY['FRONT_END_ERROR']   = 'Denne kategori eksisterer ikke, eller ingen billeder i mappen';
$MOD_FOLDERGALLERY['PAGE']              = 'Side';




//Variables for the Backend
$MOD_FOLDERGALLERY['PICS_PP']           = 'Billeder pr. side';
$MOD_FOLDERGALLERY['LIGHTBOX']          = 'Lightbox';
$MOD_FOLDERGALLERY['MODIFY_CAT_TITLE']  = 'Opdater kategori og billedredigering';
$MOD_FOLDERGALLERY['MODIFY_CAT']        = 'Opdater kategoridetaljer';
$MOD_FOLDERGALLERY['CAT_NAME']          = 'Kategorinavn/titel';
$MOD_FOLDERGALLERY['CAT_DESCRIPTION']   = 'Kategoribeskrivelse';
$MOD_FOLDERGALLERY['MODIFY_IMG']        = 'Opdater billeder';
$MOD_FOLDERGALLERY['IMAGE']             = 'Billede';
$MOD_FOLDERGALLERY['IMAGE_NAME']        = 'Billednavn';
$MOD_FOLDERGALLERY['IMG_CAPTION']       = 'Billedbeskrivelse';
$MOD_FOLDERGALLERY['REDIRECT']          = 'Du bliver nu viderestillet';
$MOD_FOLDERGALLERY['TITEL_BACKEND']     = 'Galleriindstillinger';
$MOD_FOLDERGALLERY['TITEL_MODIFY']      = 'Rediger billed og kategori';
$MOD_FOLDERGALLERY['SETTINGS']          = 'Generelle indstillinger';
$MOD_FOLDERGALLERY['ROOT_DIR']          = 'Rod';
$MOD_FOLDERGALLERY['EXTENSIONS']        = 'Tilladte filtyper';
$MOD_FOLDERGALLERY['INVISIBLE']         = 'Usynlig mappe';
$MOD_FOLDERGALLERY['NEW_SCANN_INFO']    = 'Thumbnails genereres automatisk.';
$MOD_FOLDERGALLERY['FOLDER_NAME']       = 'Mappenavn';
$MOD_FOLDERGALLERY['DELETE']            = 'Slet?';
$MOD_FOLDERGALLERY['ERROR_MESSAGE']     = 'Ingen data som skal behandles';
$MOD_FOLDERGALLERY['DB_ERROR']          = 'Databasefejl';
$MOD_FOLDERGALLERY['FS_ERROR']          = 'Kunne ikke slette mappe';
$MOD_FOLDERGALLERY['NO_FILES_IN_CAT']   = 'Denne kategori indeholder ingen billeder';
$MOD_FOLDERGALLERY['SYNC']              = 'Opdater galleribilleder med database';
$MOD_FOLDERGALLERY['EDIT_CSS']          = 'Opdater CSS';
$MOD_FOLDERGALLERY['FOLDER_IN_FS']      = 'Orden';
$MOD_FOLDERGALLERY['CAT_TITLE']         = 'Titel';
$MOD_FOLDERGALLERY['ACTION']            = 'Aktion';
$MOD_FOLDERGALLERY['NO_CATEGORIES']     = 'Ingen kategorier';
$MOD_FOLDERGALLERY['EDIT_THUMB']        = 'Rediger thumbnail';
$MOD_FOLDERGALLERY['EDIT_THUMB_DESCRIPTION']    = '<strong>Vælg nyt</strong>';
$MOD_FOLDERGALLERY['EDIT_THUMB_BUTTON']         = 'Opdater thumbnail';
$MOD_FOLDERGALLERY['THUMB_SIZE']                = 'Thumbnail størrelse';
$MOD_FOLDERGALLERY['THUMB_RATIO']               = 'Thumbnail størrelsesforhold';
$MOD_FOLDERGALLERY['THUMB_NOT_NEW']             = 'Keine neuen Thumbnails erzeugen';
$MOD_FOLDERGALLERY['CHANGING_INFO']             = 'Das ändern von <strong>Thumbnail Größe</strong> oder <strong>Thumbnail Verhältniss</strong> bewirkt das löschen (und neu erstellen) aller Thumbnails.';
$MOD_FOLDERGALLERY['SYNC_DATABASE']             = 'Synkronisere';
$MOD_FOLDERGALLERY['SAVE_SETTINGS']             = 'Einstellungen werden gespeichert...';
$MOD_FOLDERGALLERY['SORT_IMAGE']                = 'Bilder sortieren';
$MOD_FOLDERGALLERY['BACK']                      = 'Zur&uuml;ck';
$MOD_FOLDERGALLERY['REORDER_INFO_STRING']       = 'Status: Ordnen sie die Elemente nun neu an.';
$MOD_FOLDERGALLERY['REORDER_INFO_SUCESS']       = 'Status: Die neue Anordnung wurde erfolgreich gespeichert!';
$MOD_FOLDERGALLERY['REORDER_IMAGES']            = 'Bilder sortieren';
$MOD_FOLDERGALLERY['SORT_BY_NAME']              = 'Bilder nach Dateiname sortiern';
$MOD_FOLDERGALLERY['SORT_BY_NAME_ASC']          = 'Dateiname aufsteigend';
$MOD_FOLDERGALLERY['SORT_BY_NAME_DESC']         = 'Dateiname absteigend';
$MOD_FOLDERGALLERY['SORT_FREEHAND']             = 'Frei sortieren (Drag & Drop)';

// Tooltips
$MOD_FOLDERGALLERY['ROOT_FOLDER_STRING_TT']	= 'Dieser Ordner legt den Stammordner fest, in welchem rekursiv nach Bilder gesucht wird. Bitte nur beim installieren &auml;ndern, sonst gehen alle Infos zu den Bilder verloren!';
$MOD_FOLDERGALLERY['EXTENSIONS_STRING_TT']	= 'Legen sie hier die erlaubten Dateierweiterungen fest. Verwenden sie das Koma als Trennzeichen. Auf Gross-/Kleinschreibung wird nicht geachtet.';
$MOD_FOLDERGALLERY['INVISIBLE_STRING_TT']	= 'Ordner die sie hier eintragen werden nicht durchsucht.';
$MOD_FOLDERGALLERY['DELETE_TITLE_TT']		= 'Achtung, es werden ALLE Bilder und Unterkategorien mitsamt den Bilder vom Server gelöscht!';
?>
