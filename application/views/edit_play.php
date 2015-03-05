<div class="row, container" id="content">
    <div class="errors">
        {message}
    </div>
    <form action="/adminplays/confirm/{id}" method="post">
        {phoneId}
        {title}
        {image}
        {desc}
        {value}
        {rating}
        {link}
        <br/>
        {submit}
    </form>
</div>

<br/>
<a href="/adminplays" role="button" class="btn btn-default">Go Back</a>