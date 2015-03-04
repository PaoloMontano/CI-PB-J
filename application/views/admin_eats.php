<div class="container" id="content">
    <table class="results, manage">
        <tr>
            <th>Phone</th>
            <th>Name</th>
            <th>Image</th>
            <th>Manage</th>
        </tr>
        {eats}
        <tr>
            <td>{phoneId}</td>
            <td>{title}</td>
            <td>
                <img src="/assets/images/{image}" alt="pic">
            </td>
            <td>
                <a href="/admineats/editEat/{phoneId}">Edit</a> | 
                <a href="/admineats/deleteEat/{phoneId}">Delete</a>
            </td>
        </tr>
        {/eats}
    </table>
</div>
<br/>
<a href="/admineats/addEat">Add Eat</a>
<br/>
<a href="./">Go back</a>