<div class="container" id="content">
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <h1>Top Eats</h1>
            {top-eat}<a href="{link}"><img src="/assets/images/{image}" alt="" height="200px"/></a>{/top-eat}
            <ul>
				{eats}
                <li><a href="{link}">{title}</a></li>
				{/eats}
            </ul>
            <button type="button" class="btn btn-default" onclick="location.href='/eat'">View All</button>
        </div>
        <div class="col-md-4 col-xs-12">
            <h1>Top Plays</h1>
            {top-play}<a href="{link}"><img src="/assets/images/{image}" alt="" height="200px"/></a>{/top-play}
            <ul>
				{plays}
                <li><a href="{link}">{title}</a></li>
				{/plays}
            </ul>
            <button type="button" class="btn btn-default" onclick="location.href='/play'">View All</button>
        </div>
        <div class="col-md-4 col-xs-12">
            <h1>Top Sleeps</h1>
            {top-sleep}<a href="{link}"><img src="/assets/images/{image}" alt="" height="200px"/></a>{/top-sleep}
            <ul>
				{sleeps}
                <li><a href="{link}">{title}</a></li>
				{/sleeps}
            </ul>
            <button type="button" class="btn btn-default" onclick="location.href='/sleep'">View All</button>
        </div>
    </div>
</div>