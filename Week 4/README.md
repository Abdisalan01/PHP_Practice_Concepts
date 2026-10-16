# Week 4 — Chapter 4: Advanced PHP Forms, Validation & Application Workflow (Part 1)

This week we learn how **HTML forms** collect information from a user, and how **PHP superglobals** read that information back on the server. We cover the main form controls: text boxes, password fields, radio buttons, checkboxes, drop-down menus and text areas.

📄 **[index.php](index.php)** — all the code of this part in one file (4 small form examples)
📁 **[Screen_Shot](Screen_Shot/)** — one picture per topic (code + output), plus a [README](Screen_Shot/README.md) that explains the code.

---

## 1. What is a form?

- The main way a website user talks to PHP/MySQL is through an **HTML form**.
- A form is a **collection of controls (fields)** used to gather information from the user.
- You open a form with `<form>` and close it with `</form>`. Every other tag used inside it is a **sub-tag** of `<form>`.

### Handling a form is a multi-step process
1. The form is **created**, and the user enters the required details.
2. The data is **sent to the server**, where PHP reads it and often checks it for errors.
3. If something is wrong, the form may be **redisplayed with an error message**.
4. When PHP is satisfied the input is correct, it takes some action — usually saving it to a **database**.

### Common form controls
Text fields, password fields, hidden fields, radio buttons, checkboxes, textarea fields, drop-down menus, listboxes, file uploads, submit/image/reset/button fields, and the newer HTML5 types: color, date, time, email, number, range, search, tel.

### The minimum a form needs
- An opening `<form>` and closing `</form>` tag.
- A submission method: **`GET`** or **`POST`**.
- One or more input controls.
- The destination URL the form data is sent to (the `action` attribute). Leaving it empty (`action=""`) sends the data to the **same page**, which is what every example in `index.php` does.

---

## 2. Form element tags

| Tag | Purpose |
|---|---|
| `<FORM>` | Wraps the whole form |
| `<FIELDSET>` | Groups related controls together |
| `<LEGEND>` | A caption for a `<FIELDSET>` |
| `<LABEL>` | A label for a control. Helpful for screen readers — they read the label out loud when the control gets focus |
| `<INPUT>` | Many kinds of controls, depending on its `type` attribute |
| `<SELECT>` | A drop-down list |
| `<OPTION>` | One choice inside a `<SELECT>` |
| `<TEXTAREA>` | A multi-line text field |

---

## 3. Retrieving submitted data (superglobals)

PHP reads form data through **superglobals** — associative arrays where the index is the control's `name`.

| Superglobal | Used when the form method is |
|---|---|
| `$_GET` | `GET` |
| `$_POST` | `POST` |
| `$_REQUEST` | `GET` **or** `POST` |
| `$_FILES` | File uploads (see Week 5) |

**Notes:**
- Superglobal names are written in **UPPERCASE**: `$_POST`.
- The index can be written with single or double quotes: `$_POST['name']`.
- Form control **names are case-sensitive**.

---

## 4. Textbox, password and textarea (lines 9–38)

```php
<form method="post">
    <input type="text" name="fullName">
    <input type="password" name="pinCode">
    <textarea name="comment"></textarea>
    <input type="submit" name="submit_contact" value="Register">
</form>

<?php
if (!empty($_POST["submit_contact"])) {
    echo "User name: " . $_POST["fullName"];
    echo "Password: " . $_POST["pinCode"];
}
```

- `type="text"` is a normal text box; `type="password"` hides what is typed.
- `<textarea>` is for longer, multi-line input. `cols` sets its width, `rows` sets its height.
- Checking `!empty($_POST["submit_contact"])` lets PHP know **this particular form** was submitted — useful once a page has more than one form.
- `htmlspecialchars()` is used before printing the value back, so a user cannot inject HTML/JavaScript into the page (basic output safety).

---

## 5. Radio button fields (lines 44–58)

```php
<input type="radio" name="sex" value="male"> Male
<input type="radio" name="sex" value="female"> Female
```

- Radio buttons that share the **same `name`** act as **one group** — only one of them can be selected at a time.
- `!empty($_POST['sex'])` checks that the user actually picked one before reading `$_POST['sex']`.

---

## 6. Checkbox fields (lines 64–81)

```php
<input type="checkbox" name="faculties[]" value="engineering"> Engineering
<input type="checkbox" name="faculties[]" value="medicine"> Medicine
```

```php
foreach ($_POST['faculties'] as $f)
    echo ("$f, ");
```

- Checkboxes are **independent** — any number can be checked.
- Naming them `faculties[]` (with square brackets) tells PHP to collect every checked value into **one array** instead of overwriting a single value.
- `foreach` is then used to print every selected faculty.

---

## 7. Drop-down menu — single choice (lines 87–100)

```php
<select name="pob">
    <option value="Muqdisho">Muqdisho</option>
    <option value="Hargeysa">Hargeysa</option>
</select>
```

- A plain `<select>` (no `multiple` attribute) only ever lets the user pick **one** option.
- `$_POST['pob']` then holds that single chosen value.
- 👉 A `<select multiple>` (a **listbox**, allowing many choices) is covered in [Week 5](../Week%205/).

---

## Quick summary

- A form is a group of controls; PHP reads them back through `$_GET`, `$_POST`, `$_REQUEST` and `$_FILES`.
- Text/password/textarea give free text; radio buttons give **one** choice from a group; checkboxes give **any number** of choices; a plain drop-down gives **one** choice.
- `name="x[]"` (checkboxes, multi-select lists) makes PHP return an **array** instead of a single value.
- Always check `!empty(...)` before reading a value the user may not have filled in, and escape values with `htmlspecialchars()` before echoing them back.
