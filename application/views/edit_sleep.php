<div class="row, container" id="content">
    <div class="errors">
        {message}
    </div>
    <form action="/AdminSleeps/confirm/{id}" method="post">
        {form_phoneId}
        {form_title}
        {form_image}
        {form_desc}
        {form_value}
        {form_rating}
        {form_link}
        <br/>
        <br/>
        <a href="../" role="button" class="btn btn-default">Cancel</a>
        {submit}
    </form>
    <br/>
</div>