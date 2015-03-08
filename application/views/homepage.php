<div class="container" id="content">
    <div class="row">
        
        <div class="col-md-4 col-xs-12">
            <h1>Top Eats</h1>
            {top-eat}<a href="/Eat/view/{id}"><img src="/assets/images/{image}" alt="" height="200px"/></a>{/top-eat}
            <br/><br/>
            <ul>
		{eats}
                <li><a href="/Eat/view/{id}">{title}</a></li>
		{/eats}
            </ul>
            <br/>
            <a href="/eat" role="button" class="btn btn-default">View All</a>
        </div>
        
        <div class="col-md-4 col-xs-12">
            <h1>Top Plays</h1>
            {top-play}<a href="/Play/view/{id}"><img src="/assets/images/{image}" alt="" height="200px"/></a>{/top-play}
            <br/><br/>
            <ul>
		{plays}
                <li><a href="/Play/view/{id}">{title}</a></li>
		{/plays}
            </ul>
            <br/>
            <a href="/play" role="button" class="btn btn-default">View All</a>
        </div>
        
        <div class="col-md-4 col-xs-12">
            <h1>Top Sleeps</h1>
            {top-sleep}<a href="/Sleep/view/{id}"><img src="/assets/images/{image}" alt="" height="200px"/></a>{/top-sleep}
            <br/><br/>
            <ul>
                {sleeps}
                <li><a href="/Sleep/view/{id}">{title}</a></li>
                {/sleeps}
            </ul>
            <br/>
            <a href="/sleep" role="button" class="btn btn-default">View All</a>
        </div>
        
    </div>
    <br/>
</div>
