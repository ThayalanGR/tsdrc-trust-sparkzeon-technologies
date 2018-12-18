function _(element) {
    return document.getElementById(element)
}


jQuery(document).ready(function ($) {

    // console.log('here')
    const container = _('feed');
    console.log(container.innerHTML);

    const constructDom = (res) => {
        // console.log(res)
        res.map((item, i) => {
            console.log(item);
            container.innerHTML += `<li class="news">
                                        <div class="sec1">${i+1}.</div>
                                        <div class="sec2">${item.title} <br>
                                            <span style="font-weight: normal; font-size: 12px;"><b>posted at:</b> ${item.createdAt.split(" ")[0]} <b>time:</b> ${item.createdAt.split(" ")[1]} </span>
                                        </div>
                                        <div class="sec3"> <a href="admin/newsfeed/pdf/${item.path}" target="_blank" class="sec3-button"> read </a> </div>
                                    </li>	`;
                // console.log(content);
            // content += content1;
        });
        // container.innerHTML += content;
    }

    const api = 'http://localhost/tsdrc/restApi/newsfeed.php'

    fetch(api)
        .then(res => res.json())
        .then(res => {
            // console.log(res);
            constructDom(res.newsfeed)
        })
        .catch(err => console.error(err))




});