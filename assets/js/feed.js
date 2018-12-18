function _(element) {
    return document.getElementById(element)
}


jQuery(document).ready(function ($) {

    // console.log('here')
    const container = _('portfolio');
    console.log(container.innerHTML);

    const constructDom = (res) => {
        // console.log(res)
        res.map((item, i) => {
            console.log(item);
            container.innerHTML += `
                <div class="span4" style="border: 1px solid lightgreen; max-width: 300px; max-height: 300px;" min-width: 300px; min-height: 300px; >
                    <div class="portfolio">
                        <a href="admin/gallery/${item.path}" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                            <img style="min-width: 300px; min-height: 300px;" src="admin/gallery/${item.path}" alt="" />
                            <div class="portfolio-overlay">
                                <div class="thumb-info">
                                    <h5>${item.path.split('.')[0]}</h5>
                                    <i class="icon-plus icon-2x"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>`;
                // console.log(content);
            // content += content1;
        });
        // container.innerHTML += content;
    }

    const api = 'http://localhost/tsdrc/restApi/gallery.php'

    fetch(api)
        .then(res => res.json())
        .then(res => {
            // console.log(res);
            constructDom(res.gallery)
        })
        .catch(err => console.error(err))




});