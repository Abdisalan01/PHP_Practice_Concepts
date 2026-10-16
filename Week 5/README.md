# Week 5 — Chapter 4: Advanced PHP Forms, Validation & Application Workflow (Part 2)

This week continues the chapter from [Week 4](../Week%204/): first the **listbox** control (a drop-down that allows more than one choice), then the full **file upload** workflow — configuring PHP, building the upload form, and moving the uploaded file to its final destination with `$_FILES` and `move_uploaded_file()`.

📄 **[dropdown.php](dropdown.php)** — listbox (multiple choice) example, self-contained
📄 **[index.php](index.php)** — the file upload form
📄 **[Home.php](Home.php)** — the PHP script that receives and saves the uploaded file
📁 **[Screen_Shot](Screen_Shot/)** — one picture per topic (code + output), plus a [README](Screen_Shot/README.md) that explains the code.

---

## 1. Listbox (multiple choice)

A **listbox** is a `<select>` with the `multiple` attribute. Instead of one choice, the user can select several (holding Ctrl/Cmd while clicking).

```php
<select name="distric[]" multiple>
    <option value="hodan">Hodan</option>
    ...
</select>
```

```php
foreach ($_POST['distric'] as $r)
    echo ("$r, ");
```

- Just like checkboxes, naming the control **`distric[]`** (square brackets) makes `$_POST['distric']` come back as an **array** of every value the user selected.
- `foreach` is used to print each selected value.
- Compare this with the single-choice drop-down in [Week 4](../Week%204/index.php), which returns one plain string.

---

## 2. Uploading files in PHP

### `php.ini` settings that control uploads

| Setting | Meaning | Default |
|---|---|---|
| `file_uploads` | Whether PHP allows uploads at all | `On` |
| `upload_tmp_dir` | Where uploaded files are stored **temporarily** | `C:\xampp\tmp` |
| `upload_max_filesize` | Biggest file PHP will accept | `40M` |
| `max_file_uploads` | Max files per request | `20` |
| `post_max_size` | Max size of the whole POST request | `40M` |
| `max_input_time` | Max seconds PHP spends reading the request | `60` |
| `memory_limit` | Max memory one script may use | `512M` |
| `max_execution_time` | Max seconds one script may run | `120` |

👉 After changing `php.ini`, you must **restart the server**.

### Two upload stages
1. **Temporary storage** — the browser sends the file, and PHP stores it in a temporary directory (`upload_tmp_dir`).
2. **Permanent storage** — the PHP script moves the file from that temporary spot to its real destination.

For stage 2 to succeed, the **destination folder must exist**, and PHP must have **permission to write** into it.

### Building the form

```php
<form action="Home.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit">
</form>
```

- `method="post"` is required.
- `enctype="multipart/form-data"` is required — without it, the file's contents are never actually sent, only its name.

### Process of uploading a file
1. The user opens the page, clicks **Browse** and picks a file.
2. The user clicks **Submit**.
3. The browser sends the file to PHP's **temporary directory** on the server.
4. The script named in the form's `action` checks the file arrived, then **copies it to its intended folder**.
5. The script reports success (or failure) back to the user.

### `$_FILES` — the file superglobal

`$_FILES['file']` is itself an associative array:

| Key | Holds |
|---|---|
| `['name']` | The original file name |
| `['size']` | The file size, in bytes |
| `['tmp_name']` | Its temporary name/location on the server |
| `['type']` | Its MIME type |

### Moving the file

```php
move_uploaded_file($_FILES['file']['tmp_name'], $destination);
```

`move_uploaded_file()` takes the **temporary file name** and the **destination path** (folder + final file name), and moves the file there. It returns `true` on success.

---

## Quick summary

- A listbox (`<select multiple>`) and checkboxes both use `name="x[]"` so PHP returns an **array** of every selection.
- A file upload form must use `method="post"` **and** `enctype="multipart/form-data"`.
- PHP stores an uploaded file **temporarily** first; the script must then move it with `move_uploaded_file()` to make it permanent.
- `$_FILES['field']['name' | 'size' | 'tmp_name' | 'type']` gives everything needed to validate and relocate the file.
- `php.ini` settings (`upload_max_filesize`, `post_max_size`, …) set the hard limits PHP enforces before your own code even runs.
