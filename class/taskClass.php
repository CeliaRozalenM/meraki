<?php

class taskClass
{
/* User Login */
    public function allTasks()
    {
        try {
            $db = getDB();
            $stmt = $db->prepare("SELECT task_name, color_user, task_start_date, task_final_date, task_description  FROM task INNER JOIN users
            ON user_id = uid WHERE task_built=1;");
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $data []= $row;
            }
            return $data;
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
    }

    public function allTasksUser($uid)
    {
        try {
            $data=[];
            $db = getDB();
            $stmt = $db->prepare("SELECT task_id, task_name, task_start_date, task_final_date, task_description FROM task WHERE user_id=:user_id AND task_built=0");
            $stmt->bindParam("user_id", $uid, PDO::PARAM_INT);
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $data []= $row;
            }
            return $data;
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
    }

    public function finishSprint()
    {
        try {
            $data=[];
            $db = getDB();
            $stmt = $db->prepare("SELECT task_built FROM task WHERE task_sprint=1 AND task_built=0");
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $data []= $row;
            }
            return $data;
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
    }
}
