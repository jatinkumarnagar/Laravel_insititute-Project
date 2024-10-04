function setActive() {
    let navbar = document.getElementById('nav-bar');
    let a_tags = navbar.getElementsByTagName('a');
    let currentPath = document.location.pathname;

    let a_tags_length = a_tags.length;  // Cache the length of a_tags for better performance

    for (let i = 0; i < a_tags_length; i++) {
        let href = a_tags[i].getAttribute('href');

        if (!href) continue;

        // Handle relative and absolute URLs
        let absolutePath = href.startsWith('http') ? new URL(href).pathname : new URL(href, document.location.origin).pathname;

        if (currentPath === absolutePath) {
            a_tags[i].classList.add('active');
        }
    }
}

document.addEventListener('DOMContentLoaded', setActive);

function deleteArticle(id) {
    if(confirm("Are you sure you want to delete Article?")) {
        document.getElementById("delete-article-from-"+id).submit();
    }
}
