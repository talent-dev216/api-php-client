# CrmCareCloud\Webservice\RestApi\Client\TokensApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTokenAuthentication**](TokensApi.md#gettokenauthentication) | **GET** /tokens/{token_id}/actions/auth-token | Get authentication token
[**postToken**](TokensApi.md#posttoken) | **POST** /tokens | Create a token
[**postTokenAuthTokenLogin**](TokensApi.md#posttokenauthtokenlogin) | **POST** /tokens/{token_id}/actions/authentication-token-login | Login via authentication token
[**postTokenLogin**](TokensApi.md#posttokenlogin) | **POST** /tokens/{token_id}/actions/login | Login to the application
[**postTokenLogout**](TokensApi.md#posttokenlogout) | **POST** /tokens/{token_id}/actions/logout | Logout from the application
[**postTokenSendPasswordSetup**](TokensApi.md#posttokensendpasswordsetup) | **POST** /tokens/{token_id}/actions/send-password-setup-email | Send the message for the setup of a new customer&#x27;s password
[**postTokenSocialLogin**](TokensApi.md#posttokensociallogin) | **POST** /tokens/{token_id}/actions/social-network-login | Login via social network
[**postTokenTestCustomerLogin**](TokensApi.md#posttokentestcustomerlogin) | **POST** /tokens/{token_id}/actions/login-test-customer | Login to the application for test customer
[**putToken**](TokensApi.md#puttoken) | **PUT** /tokens/{token_id} | Edit a push token

# **getTokenAuthentication**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetTokenAuthentication200Response getTokenAuthentication($token_id, $external_application_id, $token_type, $accept_language)

Get authentication token

Returns authentication token for specific external application. <br/> ⚠️ Endpoint is available only in Customer interface.<br/>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_id = "token_id_example"; // string | A client application token.
$external_application_id = "external_application_id_example"; // string | ID of an external application. This is an application that you want to login a customer with an authentication token. For ID of an external application, please contact your CareCloud administrator.
$token_type = 1; // int | Parameter set witch token type should be generated. *Possible values: 1- alphanumeric, 2- numeric*
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getTokenAuthentication($token_id, $external_application_id, $token_type, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getTokenAuthentication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_id** | **string**| A client application token. |
 **external_application_id** | **string**| ID of an external application. This is an application that you want to login a customer with an authentication token. For ID of an external application, please contact your CareCloud administrator. |
 **token_type** | **int**| Parameter set witch token type should be generated. *Possible values: 1- alphanumeric, 2- numeric* | [default to 1]
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetTokenAuthentication200Response**](../Model/GetTokenAuthentication200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postToken**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostTokens201Response postToken($body, $accept_language)

Create a token

Create a token and setup of the client application. <br/> ⚠️ The endpoint is available only in the Customer interface.<br/> ⚠️ When creating a new token, the request doesn't need to contain an Authentication header.<br/> ⚠️ Warning: We highly recommend filling all identifications in the tokens resource (device and application) to avoid problems if multiple applications use the CareCloud REST API on one device.<br/>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\TokensBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\TokensBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postToken($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->postToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\TokensBody**](../Model/TokensBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostTokens201Response**](../Model/PostTokens201Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTokenAuthTokenLogin**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostTokenAuthTokenLogin200Response postTokenAuthTokenLogin($body, $token_id, $accept_language)

Login via authentication token

Log in the customer using the provided authentication token for a seamless and secure login experience. <br/> The authentication token can be provided in the method [GET /tokens/{token_id}/actions/auth-token](https://carecloud.readme.io/reference/gettokenauthentication) <br/> ⚠️ Endpoint is available only in Customer interface.<br/>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsAuthenticationtokenloginBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsAuthenticationtokenloginBody | 
$token_id = "token_id_example"; // string | A client application token.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postTokenAuthTokenLogin($body, $token_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->postTokenAuthTokenLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsAuthenticationtokenloginBody**](../Model/ActionsAuthenticationtokenloginBody.md)|  |
 **token_id** | **string**| A client application token. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostTokenAuthTokenLogin200Response**](../Model/PostTokenAuthTokenLogin200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTokenLogin**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostTokenLogin200Response postTokenLogin($body, $token_id, $accept_language)

Login to the application

Login of a customer account to client's application.<br/> ⚠️ Endpoint is available only in Customer interface.<br/>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsLoginBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsLoginBody | 
$token_id = "token_id_example"; // string | A client application token.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postTokenLogin($body, $token_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->postTokenLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsLoginBody**](../Model/ActionsLoginBody.md)|  |
 **token_id** | **string**| A client application token. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostTokenLogin200Response**](../Model/PostTokenLogin200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTokenLogout**
> postTokenLogout($token_id, $accept_language)

Logout from the application

Logout of a customer account to client's application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_id = "token_id_example"; // string | A client application token.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->postTokenLogout($token_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->postTokenLogout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_id** | **string**| A client application token. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTokenSendPasswordSetup**
> postTokenSendPasswordSetup($body, $token_id, $accept_language)

Send the message for the setup of a new customer's password

Send a message, that contains a link to set up a new customer password.<br/> The use case [Forgotten password](https://www.crmcarecloud.com/build-a-mobile-app/#accordion-customer-use-case-customer-account-operations-4) shows how to use this action method.<br/> ⚠️ Endpoint is available only in the Customer interface.<br/> ⚠️ An extra setup of the Marketing Automation scenario in CareCloud could be necessary to make the endpoint work correctly. If so, don't hesitate to get in touch with the CareCloud administrator in your organization.<br/>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSendpasswordsetupemailBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSendpasswordsetupemailBody | 
$token_id = "token_id_example"; // string | A client application token.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->postTokenSendPasswordSetup($body, $token_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->postTokenSendPasswordSetup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSendpasswordsetupemailBody**](../Model/ActionsSendpasswordsetupemailBody.md)|  |
 **token_id** | **string**| A client application token. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTokenSocialLogin**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetTokenSocialLogin200Response postTokenSocialLogin($body, $token_id, $accept_language)

Login via social network

Login of a customer account to client's application via social network. <br/> ⚠️ Endpoint is available only in Customer interface.<br/>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSocialnetworkloginBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSocialnetworkloginBody | 
$token_id = "token_id_example"; // string | A client application token.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postTokenSocialLogin($body, $token_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->postTokenSocialLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSocialnetworkloginBody**](../Model/ActionsSocialnetworkloginBody.md)|  |
 **token_id** | **string**| A client application token. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetTokenSocialLogin200Response**](../Model/GetTokenSocialLogin200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTokenTestCustomerLogin**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetTokenTestCustomerLogin200Response postTokenTestCustomerLogin($token_id, $accept_language)

Login to the application for test customer

Login of a test customer account to client's application. <br/> ⚠️ Endpoint is available only in Customer interface.<br/>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_id = "token_id_example"; // string | A client application token.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postTokenTestCustomerLogin($token_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->postTokenTestCustomerLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_id** | **string**| A client application token. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetTokenTestCustomerLogin200Response**](../Model/GetTokenTestCustomerLogin200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putToken**
> putToken($body, $token_id, $accept_language)

Edit a push token

Update a push token and installation setup. <br/> ⚠️ Endpoint is available only in Customer interface. <br/>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\TokensTokenIdBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\TokensTokenIdBody | 
$token_id = "token_id_example"; // string | A client application token.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->putToken($body, $token_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->putToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\TokensTokenIdBody**](../Model/TokensTokenIdBody.md)|  |
 **token_id** | **string**| A client application token. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

