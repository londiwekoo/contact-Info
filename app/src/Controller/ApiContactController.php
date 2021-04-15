<?php

namespace App\Controller;

use App\Service\ScheduleService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ApiContactController extends AbstractController
{
    /**
     * @Route("/api/schedule", name="api_schedule", methods={"POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function create(Request $request, ScheduleService $scheduleService)
    {
        $data = json_decode($request->getContent(),true);
        if ($scheduleService->createScheduleFromAPI($data)){
            $result = [
                'resultCode' => 0,
                'resultMsgCode' => 'SUCCESS',
                'resultMessage' => 'Schedule save successfully.'
            ];
        }else{
            $result = [
                'resultCode' => 1,
                'resultMsgCode' => 'ERROR',
                'resultMessage' => 'Error occurred while saving a schedule.'
            ];
        }

        return $this->json($result);
    }
}
