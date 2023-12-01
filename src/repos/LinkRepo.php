<?php

require_once "src/models/Link.php";
require_once "src/repos/BaseRepo.php";

class LinkRepo extends BaseRepo
{
    protected function getTableName(): string
    {
        return 'Link';
    }

    protected function getIdName(): string
    {
        return 'link_id';
    }

    protected function mapToObject(array $data): Link
    {
        return new Link(
            link_group_id: $data['link_group_id'],
            title: $data['title'],
            url: $data['url'],
            link_id: $data['link_id']
        );
    }

    protected function mapToArray(object $entity): array
    {
        if (!$entity instanceof Link) {
            throw new InvalidArgumentException('Invalid entity type.');
        }

        return [
            'link_id' => $entity->link_id,
            'link_group_id' => $entity->link_group_id,
            'title' => $entity->title,
            'url' => $entity->url,
        ];
    }

    public function findGroupLinks($groupId) : array{
        $linkGroups = array();

        $stmt = $this->db->connect()->prepare('SELECT * FROM Link WHERE link_group_id = :link_group_id');
        $stmt->execute(['link_group_id' => $groupId]);
        $results = $stmt->fetchAll();

        foreach ($results as $result) {
            $linkGroups[] = $this->mapToObject($result);
        }

        return $linkGroups;
    }
}