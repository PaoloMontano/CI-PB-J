<div class="row, container" id="content">
    <div class="errors">
        {message}
    </div>
    <form action="/AdminPlays/confirm/{id}" method="post">
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
<a href="/AdminPlays" role="button" class="btn btn-default">Go Back</a>