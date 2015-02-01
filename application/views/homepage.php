<div class="container" id="content">
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <h1>Top Hotels</h1>
            <a href="{link}"><img src="/assets/images/{top-sleep}" alt="" height="200px"/></a>
            <ul>
				{sleeps}
                <li><a href="{link}">{name}</a></li>
				{/sleeps}
            </ul>
            <button type="button" class="btn btn-default">View All</button>
        </div>
        <div class="col-md-4 col-xs-12">
            <h1>Top Attractions</h1>
            <a href="{link}"><img src="/assets/images/{top-play}" alt="" height="200px"/></a>
            <ul>
				{plays}
                <li><a href="{link}">{name}</a></li>
				{/plays}
            </ul>
            <button type="button" class="btn btn-default">View All</button>
        </div>
        <div class="col-md-4 col-xs-12">
            <h1>Top Restaurants</h1>
            <a href="{link}"><img src="/assets/images/{top-eat}" alt="" height="200px"/></a>
            <ul>
				{eats}
                <li><a href="{link}">{name}</a></li>
				{/eats}
            </ul>
            <button type="button" class="btn btn-default">View All</button>
        </div>
    </div>
</div>