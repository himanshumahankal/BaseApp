<?php
return [
  'Users.Social.login' => true,
  // for google oAuth
  'OAuth.providers.google.options.clientId' => env('GOOGLE_APP_ID'),
  'OAuth.providers.google.options.clientSecret' => env('GOOGLE_APP_SECRET'),
  // for facebook oAuth
  'OAuth.providers.facebook.options.clientId' => env('FACEBOOK_APP_ID'),
  'OAuth.providers.facebook.options.clientSecret' => env('FACEBOOK_APP_SECRET'),
  // for twitter oAuth
  'OAuth.providers.twitter.options.clientId' => env('TWITTER_APP_ID'),
  'OAuth.providers.twitter.options.clientSecret' => env('TWITTER_APP_SECRET'),
];
