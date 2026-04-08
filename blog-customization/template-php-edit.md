# Blog Header Removal — PHP Template Edit (Advanced)

Use this option if you have FTP/file access to the WordPress theme files.
This is the cleanest approach — it prevents the header HTML from being generated at all.

---

## Step 1: Identify your theme's template files

Navigate to your WordPress theme folder, typically:
```
wp-content/themes/your-active-theme/
```

Look for these files and edit each one:
- `index.php`
- `single.php`
- `archive.php`
- `category.php`
- `tag.php`
- `search.php`
- `author.php`
- `home.php` (if it exists)

---

## Step 2: Comment out `get_header()`

In each of the above files, find the line:
```php
<?php get_header(); ?>
```

Change it to:
```php
<?php // get_header(); // Helium: header hidden on blog pages ?>
```

---

## Step 3: Verify the footer still works

Make sure `get_footer()` is still present and NOT commented out in each file:
```php
<?php get_footer(); ?>
```

---

## Step 4: Check for body padding

Some themes add `padding-top` or `margin-top` to the `body` via JS or inline styles
to account for a fixed header. If you see blank space at the top after hiding the
header, add this to the WordPress Customizer → Additional CSS:

```css
body, .site, #page {
    padding-top: 0 !important;
    margin-top: 0 !important;
}
```

---

## Step 5: Test

Visit these blog page types and confirm the header is hidden:
- [ ] Blog homepage (blog.heliumlearn.com)
- [ ] A single blog post
- [ ] A category archive page
- [ ] Search results page

---

## Important Notes

- **Use a child theme** if you are editing theme files directly, so your changes
  survive theme updates.
- **Do not remove** `get_footer()` — the footer must remain visible.
- **SEO is not affected** — header removal is visual only; title tags, meta
  descriptions, and schema markup are in `<head>`, not the visual header.
- **No JS errors will be introduced** by this change.
