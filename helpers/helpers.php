<?php

// You can add helper functions here.
function validPassword(string $password): bool {
	return strlen($password) > 8;
}

// e.g. function isValidUrl(): bool {...} might be a good one since
// we will need to check for a valid URL on the new_article and update_article pages.
function validEmail(string $email): bool {
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}