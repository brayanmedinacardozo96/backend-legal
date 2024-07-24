<?php

namespace App\Http\Controllers;

use App\Services\OfficeService;
use App\Utils\ResponseBuilder;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Office",
 *     description="Despachos."
 * )
 */
class OfficeController extends Controller
{

    protected $officeService;
    protected $response;


    public function __construct(OfficeService $officeService, ResponseBuilder $response)
    {
        $this->officeService = $officeService;
        $this->response = $response;
    }

    /**
     * @OA\Get(
     *     tags={"Office"},
     *     path="/api/office",
     *     summary="Get all Office",
     *     @OA\Parameter(
     *         name="x-token",
     *         in="header",
     *         description="Key API",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *      ),
     *     @OA\Response(
     *         response=200,
     *         description="Get account user information"
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="An error has occurred."
     *     )
     * )
     */
    public function index()
    {
        try {
            $result = $this->officeService->all();
            return $this->response->data($result)->build();
        } catch (\Throwable $th) {
            $message = $th->getMessage() . ' - ' . $th->getLine();
            return $this->response->status(500)->message($message)->success(false)->build();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}