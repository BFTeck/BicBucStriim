<?php
/**
 * BicBucStriim
 *
 * Copyright 2012-2015 Rainer Volz
 * Licensed under MIT License, see LICENSE
 *
 */

namespace BicBucStriim;

class AppConstants {
# Current DB schema version
    const DB_SCHEMA_VERSION = 3;

# URL for version information
    const VERSION_URL = 'http://projekte.textmulch.de/bicbucstriim/version.json';

# Cookie name to store Kindle email address
    const KINDLE_COOKIE = 'kindle_email';
# Calibre library path
    const CALIBRE_DIR = 'calibre_dir';
# BicBucStriim DB version
    const DB_VERSION = 'db_version';
# Thumbnail generation method
    const THUMB_GEN_CLIPPED = 'thumb_gen_clipped';
# Send-To-Kindle enabled/disabled
    const KINDLE = 'kindle';
# Send-To-Kindle from-address
    const KINDLE_FROM_EMAIL = 'kindle_from_email';
# Page size for list views, no. of elemens
    const PAGE_SIZE = 'page_size';
# Displayed app name for page title
    const DISPLAY_APP_NAME = 'display_app_name';
# Kind of mail support used
    const MAILER = 'mailer';
# Name of SMTP server, if SMTP mailer is used
    const SMTP_SERVER = 'smtp_server';
# Port of SMTP server, if SMTP mailer is used
    const SMTP_PORT = 'smtp_port';
# SMTP user name, if SMTP mailer is used
    const SMTP_USER = 'smtp_user';
# SMTP password, if SMTP mailer is used
    const SMTP_PASSWORD = 'smtp_password';
# SMTP encryption, if SMTP mailer is used
    const SMTP_ENCRYPTION = 'smtp_encryption';
# if true then the metadata of books is updated before download
    const METADATA_UPDATE = 'metadata_update';
# if true then login is required
    const LOGIN_REQUIRED = 'must_login';
# field for time-sorting of books
    const TITLE_TIME_SORT = 'title_time_sort';
# Possible values for the above field
    const TITLE_TIME_SORT_TIMESTAMP = 'timestamp';
    const TITLE_TIME_SORT_PUBDATE = 'pubdate';
    const TITLE_TIME_SORT_LASTMODIFIED = 'lastmodified';
# if true then relative urls will be generated
    const RELATIVE_URLS = 'relative_urls';

    /* Error codes */

    const ERROR_BAD_DB = 1; # data.db no access
    const ERROR_BAD_SCHEMA_VERSION = 2; # data.db schema version incorrect
    const ERROR_NO_CALIBRE_PATH = 3; # Calibre library path empty
    const ERROR_BAD_CALIBRE_DB = 4; # Calibre library no access
    const ERROR_BAD_JSON = 5; # JSON input can't be decoded
    const ERROR_UNKNOWN_CONFIG = 6; # Unknown configuration key found
    const ERROR_BAD_INPUT = 7;
    const ERROR_BAD_KINDLEFROM = 8; # No or bad kindle FROM email address
    const ERROR_BAD_PAGESIZE = 9; # page size out of bounds
}
?>
