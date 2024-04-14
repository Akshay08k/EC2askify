<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <!-- Include Tailwind CSS -->
    <link href="<?= base_url('css/output.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/sidebar.css') ?>" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div id="sidebar" class="bg-gray-800 text-white w-64 min-h-screen fixed overflow-y-auto">
            <div class="container p-4">
                <div class="avatar">
                    <?php foreach ($users as $user): ?>
                        <img src="<?= base_url('/uploads/UserProfilePhotos') . '/' . $user['username'] . '.jpg' ?>"
                            alt="Profile Picture">
                    <?php endforeach ?>
                </div>
                <h3 class="admin-name">
                    <?= $user['name'] ?>
                </h3>
                <h4 class="admin-title">Admin</h4>
            </div>
            <ul class="sidebtns">
                <li><a href="/admin/dashboard">Dashboard</a></li>
                <li><a href="/admin/manage_users">User Management</a></li>
                <li><a href="/admin/manage_categories">Manage Categories</a></li>
                <li><a href="/admin/moderate_content">Content Moderation</a></li>
                <li><a href="/admin/handle_issues">Handle Issue</a></li>
                <li><a href="/admin/feedbacks">Feedbacks</a></li>
                <li><a href="/admin/handle_updates">Platform Updates</a></li>
                <li><a href="/admin/manage_accounts">Account</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-4 pl-72"> <!-- Adjust padding-left to match sidebar width -->
            <h2 class="text-2xl font-bold mb-4">Handle Reported Issues</h2>

            <!-- Display reported issues dynamically -->
            <div class="bg-white p-4 shadow-md rounded-md flex flex-wrap">
                <h3 class="text-lg font-semibold mb-4 w-full">Reported Issues</h3>

                <?php foreach ($reportedIssues as $issue): ?>
                    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-2"> <!-- Adjust width based on screen size -->
                        <div class="bg-gray-100 p-4 rounded-md shadow-md">
                            <strong class="text-gray-700 block">From User:
                                <?= $issue['from_user'] ?>
                            </strong>


                            <strong class="text-gray-700 block">Question ID:
                                <?= $issue['question_id'] ?>
                            </strong>


                            <strong class="text-red-600 block">Message:</strong>
                            <?= $issue['message'] ?>
                            <strong class="text-gray-700 block">Status:</strong>
                            <?= $issue['status'] ?>

                            <!-- Buttons for resolving and deleting reported issues -->
                            <div class="mt-4">
                                <form action="/admin/resolve_issue/<?= $issue['id'] ?>" method="post">
                                    <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Resolve</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</body>

</html>