<div id="app-output" class="wrap ninja-forms-upgrade-wrap"></div>

<script id="layout-view-template" type="text/template">

    <div id="app-before"></div>

    <table id="app-content">

    </table>

    <div id="app-after"></div>

</script>

<script id="nf-tmpl-before" type="text/template">

    <h2>Ninja Forms Upgrades</h2>
    <p>
        The following add-ons need to upgrade your form data: <%= upgrades() %>
    </p>
</script>

<script id="nf-tmpl-after" type="text/template">

</script>

<script id="nf-tmpl-table-head" type="text/template">
    <thead>
    <tr>
        <th>Name</th>
        <th>Status</th>
    </tr>
    </thead>
</script>

<script id="nf-tmpl-table-row" type="text/template">
    <td><%= name %></td>
    <td><%= icon() %></td>
</script>

<script id="nf-tmpl-table-row-empty" type="text/template">
    <td colspan="2" style="text-align: center;">No Forms Found</td>
</script>