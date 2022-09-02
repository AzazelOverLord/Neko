/**
 * Theme: Neko
 * Author: Mannatthemes
 * Timeout Js
 */


$.sessionTimeout({
  keepAliveUrl: 'page-starter.html',
  logoutButton:'Logout',
  logoutUrl: 'auth-login.html',
  redirUrl: 'auth-lock-screen.html',
  warnAfter: 3000,
  redirAfter: 30000,
  countdownBar: true
});
