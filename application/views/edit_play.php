<div class="row, container" id="content">
    <div class="errors">
        {message}
    </div>
    <form action="/AdminPlays/confirm/{id}" method="post">
        {form_phoneId}
        {form_title}
        {form_image}
        {form_desc}
        {form_value}
        {form_rating}
        {form_link}
        <br/>
        <a href="../" role="button" class="btn btn-default">Cancel</a>
        {submit}
    </form>
    <br/>
</div>