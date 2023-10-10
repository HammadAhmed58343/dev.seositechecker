
import autoComplete from "@tarekraafat/autocomplete.js";


const ArtisanApp = function () {
        showLoaderOnSubmit = function () {
            if (document.querySelectorAll('form').length > 0) {
                document.querySelectorAll('form').forEach(element => {
                    if (!element.classList.contains('no-app-loader')) {
                        element.addEventListener('submit', e => {
                            ArtisanApp.showLoader()
                        })
                    }
                });
            }
        },
        initSearch = function () {
            const route = document.querySelector('meta[name="app-search"]') ? document.querySelector('meta[name="app-search"]').content : null;
            if (document.querySelector('#toolsAutocomplete') && route) {
                const myDropdown = document.querySelector('.header-search-nav')
                const ACfield = document.querySelector('#toolsAutocomplete')
                myDropdown.addEventListener('shown.bs.dropdown', function () {
                    ACfield.focus()
                })
                myDropdown.addEventListener('hidden.bs.dropdown', function () {
                    ACfield.value = null
                })
                const config = {
                    selector: "#toolsAutocomplete",
                    data: {
                        src: async (query) => {
                            return await axios.get(route, {
                                params: {
                                    q: query
                                }
                            }).then(res => {
                                return res.data
                            }).catch(err => {
                                return err
                            });
                        },
                        keys: ["name"],
                        cache: true,
                    },
                    resultsList: {
                        element: (list, data) => {
                            if (!data.results.length) {
                                const message = document.createElement("div");
                                message.setAttribute("class", "no_result text-muted text-center py-3");
                                message.innerHTML = `<span>Found No Results for "${data.query}"</span>`;
                                list.prepend(message);
                            }
                        },
                        noResults: true,
                    },
                    resultItem: {
                        highlight: true
                    },
                    events: {
                        input: {
                            selection: (event) => {
                                const selection = event.detail.selection.value;
                                if (selection.url) {
                                    window.location = selection.url;
                                }
                            }
                        }
                    }
                };
                new autoComplete(config);
            }
        }
    return {
        init: function () {
          
            initSearch();
          
           
         
            showLoaderOnSubmit();
        
        },
        showLoader: function () {
            if (document.querySelector('#app-loader')) {
                document.querySelector('#app-loader').classList.remove('d-none')
            }
        },
        hideLoader: function () {
            if (document.querySelector('#app-loader')) {
                document.querySelector('#app-loader').classList.add('d-none')
            }
        }
      
    }
}();

window.ArtisanApp = ArtisanApp
document.addEventListener("DOMContentLoaded", function (event) {
    ArtisanApp.init();
});

