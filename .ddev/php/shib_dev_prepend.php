<?php
// Hardened local-dev Shibboleth mock for bioGames (see memory:
// shibboleth-dev-bypass-hardened-pattern). FENCED (under .ddev/, not deployed),
// FAIL-CLOSED (APP_ENV must be local), NON-DESTRUCTIVE, NO real credentials.
// Seeds $_SERVER['cn'|'mail'|'givenName'|'nickname'|'sn'] that the apps read.
$appEnv = getenv('APP_ENV');
if ($appEnv === false || $appEnv === '') { $appEnv = $_SERVER['APP_ENV'] ?? 'production'; }
if (!in_array(strtolower($appEnv), ['local','development','dev'], true)) { return; }
$mock = [
    'cn'        => getenv('MOCK_CN')        ?: 'teststudent',
    'mail'      => getenv('MOCK_MAIL')      ?: 'teststudent@stonybrook.edu',
    'givenName' => getenv('MOCK_GIVENNAME') ?: 'Test',
    'nickname'  => getenv('MOCK_NICKNAME')  ?: 'Test',
    'sn'        => getenv('MOCK_SN')        ?: 'Student',
];
foreach ($mock as $k => $v) { if (empty($_SERVER[$k])) { $_SERVER[$k] = $v; } }
