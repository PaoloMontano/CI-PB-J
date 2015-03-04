<div class="container" id="content">
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <h1>Top Hotels</h1>
            <a href="{top-sleep-link}"><img src="/assets/images/{top-sleep}" alt="" height="200px"/></a>
            <ul>
				{sleeps}
                <li><a href="{link}">{name}</a></li>
				{/sleeps}
            </ul>
            <a href="/eat" role="button" class="btn btn-default">View All</a>
        </div>
        <div class="col-md-4 col-xs-12">
            <h1>Top Attractions</h1>
            <a href="{top-play-link}"><img src="/assets/images/{top-play}" alt="" height="200px"/></a>
            <ul>
				{plays}
                <li><a href="{link}">{name}</a></li>
				{/plays}
            </ul>
            <a href="/play" role="button" class="btn btn-default">View All</a>
        </div>
        <div class="col-md-4 col-xs-12">
            <h1>Top Restaurants</h1>
            <a href="{top-eat-link}"><img src="/assets/images/{top-eat}" alt="" height="200px"/></a>
            <ul>
				{eats}
                <li><a href="{link}">{name}</a></li>
				{/eats}
            </ul>
            <a href="/sleep" role="button" class="btn btn-default">View All</a>
        </div>
    </div>
</div>