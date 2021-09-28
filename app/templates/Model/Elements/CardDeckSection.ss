<div class="text-left">
    <% if $ShowTitle %>
    <h2>$Title</h2>
    <% end_if %>
</div>
<div class="row justify-content-center align-items-stretch my-n2">
  <% loop Cards %>
    <% include Model/Elements/Includes/CardSize %>
      <div class="card h-100 shadow-sm">
        <% if Image %>
          <img class="card-img-top" src="$ImageForTemplate.URL" alt="$Title">
        <% end_if %>
        <div class="card-body">
          <% if ShowTitle %>
            <h5 class="card-title">$Title</h5>
          <% end_if %>
          <% if Content %>
            $Content
          <% end_if %>
        </div>
        <% if Link %>
          <div class="card-body flex-grow-0 pt-0" <% include Model/Elements/Includes/LinkUnavailableTooltip %> >
          <% with Link %>
            <a {$IDAttr} class="btn btn-primary btn-block<% if not Up.isAvailable %> disabled cursor-block<% end_if %>" href="<% if Up.isAvailable %>{$LinkURL}<% else %>#<% end_if %>" {$TargetAttr}>
                $Title
            </a>
          <% end_with %>
          </div>
        <% end_if %>
      </div>
    </div>
  <% end_loop %>
</div>
