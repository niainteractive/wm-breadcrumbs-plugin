# wm-breadcrumbs-plugin
Simple breadcrumbs plugin for WinterCMS

*To use the plugin:*

    Install the plugin via the WinterCMS backend.
    Add the breadcrumbs component to your page layout.

Customization

    Styling: Customize the HTML in partials/breadcrumbs.htm to match your website's design.
    Separator: Add a separator between breadcrumb items.
    Home link: Add a link to the homepage as the first breadcrumb.
    Current page styling: Style the current page differently in the breadcrumbs.

Additional Considerations

    Performance: For large websites, consider caching the breadcrumbs to improve performance.
    Error handling: Handle cases where the page doesn't have a parent or doesn't exist.
    Localization: Provide translations for breadcrumb titles.

This is a basic implementation of a breadcrumbs plugin for WinterCMS. You can extend it further to meet your specific requirements.

Note: This code assumes that you have the WinterCMS Static Pages plugin installed and that your pages have a hierarchical structure.
