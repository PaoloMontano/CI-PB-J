<div class="container" id="content">
    <table class="results, manage">
        <tr>
            <th>ID</th>
            <th>Phone</th>
            <th>Name</th>
            <th>Image</th>
            <th>Value</th>
            <th>Rating</th>
            <th>Manage</th>
        </tr>
        {plays}
        <tr>
            <td>{form_id}</td>
            <td>{form_phoneId}</td>
            <td>{form_title}</td>
            <td>
                <img src="/assets/images/{form_image}" alt="pic">
            </td>
            <td>{form_value}</td>
            <td>{form_rating}</td>
            <td>
                <a href="/AdminPlays/edit/{id}">Edit</a> | 
                <a href="/AdminPlays/delete/{id}">Delete</a>
            </td>
        </tr>
        {/plays}
    </table>
    <br/>
    <a href="/AdminPlays/add" role="button" class="btn btn-default">Add Play</a>
    <a href="/admin" role="button" class="btn btn-default">Go Back</a>
    <br/>
    <br/>
</div>