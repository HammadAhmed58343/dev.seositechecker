<?php
namespace Aws\Transfer;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Transfer for SFTP** service.
 * @method \Aws\Result createAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessAsync(array $args = [])
 * @method \Aws\Result createAgreement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAgreementAsync(array $args = [])
 * @method \Aws\Result createConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConnectorAsync(array $args = [])
 * @method \Aws\Result createProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProfileAsync(array $args = [])
 * @method \Aws\Result createServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServerAsync(array $args = [])
 * @method \Aws\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \Aws\Result createWorkflow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkflowAsync(array $args = [])
 * @method \Aws\Result deleteAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessAsync(array $args = [])
 * @method \Aws\Result deleteAgreement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAgreementAsync(array $args = [])
 * @method \Aws\Result deleteCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCertificateAsync(array $args = [])
 * @method \Aws\Result deleteConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConnectorAsync(array $args = [])
 * @method \Aws\Result deleteHostKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHostKeyAsync(array $args = [])
 * @method \Aws\Result deleteProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProfileAsync(array $args = [])
 * @method \Aws\Result deleteServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServerAsync(array $args = [])
 * @method \Aws\Result deleteSshPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSshPublicKeyAsync(array $args = [])
 * @method \Aws\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \Aws\Result deleteWorkflow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWorkflowAsync(array $args = [])
 * @method \Aws\Result describeAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccessAsync(array $args = [])
 * @method \Aws\Result describeAgreement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgreementAsync(array $args = [])
 * @method \Aws\Result describeCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCertificateAsync(array $args = [])
 * @method \Aws\Result describeConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConnectorAsync(array $args = [])
 * @method \Aws\Result describeExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExecutionAsync(array $args = [])
 * @method \Aws\Result describeHostKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHostKeyAsync(array $args = [])
 * @method \Aws\Result describeProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProfileAsync(array $args = [])
 * @method \Aws\Result describeSecurityPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSecurityPolicyAsync(array $args = [])
 * @method \Aws\Result describeServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServerAsync(array $args = [])
 * @method \Aws\Result describeUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserAsync(array $args = [])
 * @method \Aws\Result describeWorkflow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkflowAsync(array $args = [])
 * @method \Aws\Result importCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importCertificateAsync(array $args = [])
 * @method \Aws\Result importHostKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importHostKeyAsync(array $args = [])
 * @method \Aws\Result importSshPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importSshPublicKeyAsync(array $args = [])
 * @method \Aws\Result listAccesses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccessesAsync(array $args = [])
 * @method \Aws\Result listAgreements(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAgreementsAsync(array $args = [])
 * @method \Aws\Result listCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCertificatesAsync(array $args = [])
 * @method \Aws\Result listConnectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConnectorsAsync(array $args = [])
 * @method \Aws\Result listExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExecutionsAsync(array $args = [])
 * @method \Aws\Result listHostKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHostKeysAsync(array $args = [])
 * @method \Aws\Result listProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProfilesAsync(array $args = [])
 * @method \Aws\Result listSecurityPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSecurityPoliciesAsync(array $args = [])
 * @method \Aws\Result listServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServersAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \Aws\Result listWorkflows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWorkflowsAsync(array $args = [])
 * @method \Aws\Result sendWorkflowStepState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendWorkflowStepStateAsync(array $args = [])
 * @method \Aws\Result startFileTransfer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startFileTransferAsync(array $args = [])
 * @method \Aws\Result startServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startServerAsync(array $args = [])
 * @method \Aws\Result stopServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopServerAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result testConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testConnectionAsync(array $args = [])
 * @method \Aws\Result testIdentityProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testIdentityProviderAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccessAsync(array $args = [])
 * @method \Aws\Result updateAgreement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAgreementAsync(array $args = [])
 * @method \Aws\Result updateCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCertificateAsync(array $args = [])
 * @method \Aws\Result updateConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConnectorAsync(array $args = [])
 * @method \Aws\Result updateHostKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateHostKeyAsync(array $args = [])
 * @method \Aws\Result updateProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProfileAsync(array $args = [])
 * @method \Aws\Result updateServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServerAsync(array $args = [])
 * @method \Aws\Result updateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserAsync(array $args = [])
 */
class TransferClient extends AwsClient {}
