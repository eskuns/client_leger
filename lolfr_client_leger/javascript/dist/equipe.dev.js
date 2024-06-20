"use strict";

// Code pour mettre à jour les liens de la barre de navigation
document.addEventListener('DOMContentLoaded', function () {
  var urlParams = new URLSearchParams(window.location.search);
  var leagueId = urlParams.get('id_ligue');
  var navLinks = document.querySelectorAll('.navbar-link');
  navLinks.forEach(function (link) {
    var href = link.getAttribute('href');
    link.setAttribute('href', "".concat(href, "?id_ligue=").concat(leagueId));
  });
});