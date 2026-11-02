(function () {
	if (window.__serviceCatalogReady) {
		return;
	}
	window.__serviceCatalogReady = true;

	function closeCatalog(catalog) {
		catalog.querySelectorAll('.service-catalog__card[aria-expanded="true"]').forEach(function (card) {
			card.setAttribute("aria-expanded", "false");
		});
		catalog.querySelectorAll(".service-catalog__panel.is-open").forEach(function (panel) {
			panel.classList.remove("is-open");
		});
	}

	document.addEventListener("click", function (event) {
		var card = event.target.closest(".service-catalog__card");
		if (!card) {
			return;
		}
		var catalog = card.closest(".service-catalog");
		var panelId = card.getAttribute("aria-controls");
		var panel = panelId ? document.getElementById(panelId) : null;
		if (!catalog || !panel) {
			return;
		}
		event.preventDefault();
		var willOpen = card.getAttribute("aria-expanded") !== "true";
		closeCatalog(catalog);
		if (willOpen) {
			card.setAttribute("aria-expanded", "true");
			panel.classList.add("is-open");
		}
	});

})();
