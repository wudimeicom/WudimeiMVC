<?php

function url_b( $url = ''){
	return config("app.backend_url") . $url;
}