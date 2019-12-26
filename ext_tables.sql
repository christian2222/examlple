#
# Table structure for table 'tx_cmsp_domain_model_user'
#
CREATE TABLE tx_cmsp_domain_model_user (

	user_search int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_cmsp_domain_model_requestsearch'
#
CREATE TABLE tx_cmsp_domain_model_requestsearch (

	user int(11) unsigned DEFAULT '0' NOT NULL,

	search_user int(11) unsigned DEFAULT '0',
	search_entry int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_cmsp_domain_model_requestentry'
#
CREATE TABLE tx_cmsp_domain_model_requestentry (

	entry_search int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_cmsp_domain_model_requestsearch'
#
CREATE TABLE tx_cmsp_domain_model_requestsearch (

	user int(11) unsigned DEFAULT '0' NOT NULL,

);
