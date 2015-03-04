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
            <td>{id}</td>
            <td>{name}</td>
            <td>
                <img src="/assets/images/{pic}" alt="pic">
            </td>
            <td>
                <a href="/admin/editEat/{id}">Edit</a> | 
                <a href="/admin/deleteEat/{id}">Delete</a>
            </td>
        </tr>
        {/eats}
    </table>
</div>
<br/>
<a href="#">Add Eat</a>
<br/>
<a href="../">Go back</a>