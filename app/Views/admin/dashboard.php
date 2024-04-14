<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard</title>
    <link href="<?= base_url('css/sidebar.css') ?>" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link href="<?= base_url('css/output.min.css') ?>" rel="stylesheet">
    <style>
        .selection::-webkit-scrollbar {
            display: none;
        }

        #hidden {
            visibility: hidden;
            position: absolute;
        }

        @media print {
            body * {
                visibility: hidden;
            }

            #hidden,
            #hidden * {
                visibility: visible;
            }

            /* Define table styles */
            #hidden table {
                height: 100%;
                border-collapse: collapse;
                width: 100%;
            }

            #hidden th,
            #hidden td {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #hidden th {
                background-color: #f2f2f2;
}
    </style>
</head>

<body class="bg-gray-100 w-70">
    <div class="flex h-screen bg-gray-200">
        <div id="sidebar">
            <div class="container">
                <div class="avatar">
                    <?php foreach ($users as $user): ?>
                        <img src="<?= base_url('/uploads/UserProfilePhotos') . '/' . $user['username'] .'.jpg' ?>"
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


        <!-- Content -->
        <div class="flex-1 p-4">
            <div class="flex justify-between">
                <h2 class="text-2xl font-bold mb-4">Dashboard</h2>

                <button id="btnPrint" class="p-3 mb-4 rounded-md bg-blue-400">Print
                    PDF</button>
            </div>
          <div class="grid grid-cols-2 gap-4">
                <div class="bg-white p-4 shadow-md rounded-md">
                    <p class="text-gray-800">Total Visitors:</p>
                    <span class="text-xl font-bold text-indigo-600">
                        <?= $totalVisitor ?>
                    </span>
                </div>
  <table id="hidden">
                    <tr>
                        <th>Total Visitors:</th>
                        <td>
                            <?= $totalVisitor ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Total Users:</th>
                        <td>
                            <?= $totalUsers ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Total Categories:</th>
                        <td>
                            <?= $totalCategories ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Total Reports:</th>
                        <td>
                            <?= $totalReports ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Total Feedbacks:</th>
                        <td>
                            <?= $totalFeedbacks ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Total Questions:</th>
                        <td>
                            <?= $totalQuestions ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Total Answers:</th>
                        <td>
                            <?= $totalAnswer ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Upcoming Platform Updates</th>
                        <td>
                            <?php if (!empty ($platformUpdateNotifications)): ?>
                                <ul>
                                    <?php foreach ($platformUpdateNotifications as $notification): ?>
                                        <li>
                                            <?= esc($notification['text']); ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                No upcoming platform updates at the moment.
                            <?php endif; ?>
                        </td>
                    </tr>
                </table>
                <div class="bg-white p-4 shadow-md rounded-md">
                    <p class="text-gray-800">Total Users:</p>
                    <span class="text-xl font-bold text-indigo-600">
                        <?= $totalUsers ?>
                    </span>
                </div>
                <div class="bg-white p-4 shadow-md rounded-md">
                    <p class="text-gray-800">Total Categories:</p>
                    <span class="text-xl font-bold text-indigo-600">

                        <?= $totalCategories ?>
                    </span>
                </div>
                <div class="bg-white p-4 shadow-md rounded-md">
                    <p class="text-gray-800">Total Reports:</p>
                    <span class="text-xl font-bold text-indigo-600">
                        <?= $totalReports ?>
                    </span>
                </div>
                <div class="bg-white p-4 shadow-md rounded-md">
                    <p class="text-gray-800">Total Feedbacks:</p>
                    <span class="text-xl font-bold text-indigo-600">
                        <?= $totalFeedbacks ?>
                    </span>
                </div>
                <div class="bg-white p-4 shadow-md rounded-md">
                    <p class="text-gray-800">Total Questions:</p>
                    <span class="text-xl font-bold text-indigo-600">
                        <?= $totalQuestions ?>
                    </span>
                </div>
                <div class="bg-white p-4 shadow-md rounded-md">
                    <p class="text-gray-800">Total Answers:</p>
                    <span class="text-xl font-bold text-indigo-600">
                        <?= $totalAnswer ?>
                    </span>
                </div>
                <div class="bg-white p-4 shadow-md rounded-md">
                    <h3 class="text-gray-800 text-lg font-semibold mb-2">Upcoming Platform Updates</h3>
                    <?php if (!empty ($platformUpdateNotifications)): ?>
                        <ul class="list-disc list-inside">
                            <?php foreach ($platformUpdateNotifications as $notification): ?>
                                <li class="text-xl text-green-700">
                                    <?= esc($notification['text']); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <p>No upcoming platform updates at the moment.</p>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
  <script>
        $("#btnPrint").on("click", function () {
            window.print();
        });
    </script>
</body>

</html>
