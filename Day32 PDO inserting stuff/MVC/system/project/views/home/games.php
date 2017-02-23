<div class="categories-list">
    <h2>Tasks</h2>
    <p>These are the tasks</p>
    <ul>
        <?php foreach($tasks as $task) : ?>
            <li>
                <a href="<?php echo $task->getUrl(); ?>">
                    <?php echo $task->task_name; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>