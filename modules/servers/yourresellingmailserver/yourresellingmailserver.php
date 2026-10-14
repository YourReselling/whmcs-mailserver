<?php

declare(strict_types=1);

if (! defined('WHMCS')) {
    exit('Direct access is not permitted.');
}

require_once __DIR__.'/bootstrap.php';

use YourReselling\Whmcs\Mailserver\Integration\WhmcsModule;

/** Mail-Domain: MetaData. */
function yourresellingmailserver_MetaData(): array
{
    return ['DisplayName' => 'Your-Reselling · Mail-Domain', 'APIVersion' => '1.1', 'RequiresServer' => true];
}

/** Mail-Domain: ConfigOptions. */
function yourresellingmailserver_ConfigOptions(): array
{
    return WhmcsModule::configOptions('mailserver');
}

/** Mail-Domain: CreateAccount. */
function yourresellingmailserver_CreateAccount(array $params): string
{
    return WhmcsModule::run('mailserver', 'create', $params);
}

/** Mail-Domain: TestConnection. */
function yourresellingmailserver_TestConnection(array $params): array
{
    return WhmcsModule::testConnection($params);
}

/** Mail-Domain: ClientArea. */
function yourresellingmailserver_ClientArea(array $params): array
{
    return WhmcsModule::clientArea('mailserver', $params);
}

/** Mail-Domain: AdminCustomButtonArray. */
function yourresellingmailserver_AdminCustomButtonArray(): array
{
    return WhmcsModule::adminButtons('mailserver');
}

/** Mail-Domain: RefreshStatus. */
function yourresellingmailserver_RefreshStatus(array $params): string
{
    return WhmcsModule::run('mailserver', 'refresh', $params);
}

/** Mail-Domain: TerminateAccount. */
function yourresellingmailserver_TerminateAccount(array $params): string
{
    return WhmcsModule::run('mailserver', 'termination', $params);
}
