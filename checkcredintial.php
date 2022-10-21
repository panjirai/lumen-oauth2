
<?php
// public function handle($request, Closure $next, ...$scopes)
// {
// $psr = (new PsrHttpFactory(
// new ServerRequestFactory,
// new StreamFactory,
// new UploadedFileFactory,
// new ResponseFactory
// ))->createRequest($request);

// try {
// $psr = $this->server->validateAuthenticatedRequest($psr);
// } catch (OAuthServerException $e) {
// return response()->json([
// 'error_message' => $e->getMessage(),
// 'error_code' => $e->getHttpStatusCode()
// ], $e->getHttpStatusCode());
// throw new AuthenticationException;
// }

// $this->validate($psr, $scopes);

// return $next($request);

// $token = $request->bearerToken();
// $token = str_replace(' ', '', $token);
// // dd($token);
// if (!$token) {
// return response()->json([
// 'error' => 'Token not provided.',
// 'code' => 401
// ], 401);
// }

// try {
// $psr = $this->server->validateAuthenticatedRequest($psr);
// } catch (OAuthServerException $e) {
// // throw new AuthenticationException;
// return response()->json([
// 'error_message' => $e->getMessage(),
// 'error_code ' => $e->getHttpStatusCode()
// ], $e->getHttpStatusCode());
// }

// $this->validate($psr, $scopes);

// return $next($request);
// }

// 
?>