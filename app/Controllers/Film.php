<?php

namespace App\Controllers;
// add model
use App\Models\FilmModel;

class Film extends BaseController
{
	protected $filmModel;
	public function __construct()
	{
		$this->filmModel = new FilmModel();
	}
	public function index()
	{
		$data = [
			'title' => "Film",
			'film' => $this->filmModel->getFilm()
		];

		return view('film/list_film', $data);
	}
	public function movie()
	{
		$data = [
			'title' => "Movie",
			'film' => $this->filmModel->getFilm()
		];

		return view('film/movie', $data);
	}
	public function detail($slug)
	{
		$data = [
			'title' => "Detail Film",
			'film' => $this->filmModel->getFilm($slug)
		];

		// if slug is not found
		if (empty($data['film'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Film' . $slug . 'not found');
		}
		return view('film/detail', $data);
	}

	public function create()
	{
		session(); 		// agar pesan error di terima
		$data = [
			'title' => "Add Film",
			'validation' => \Config\Services::validation()
		];
		return view('film/create', $data);
	}
	public function save()
	{
		if (!$this->validate([
			'judul' => 'required|is_unique[listfilm.judul]',
			'sutradara' => 'required',
			'synopsis' => 'required',
			'cover' => 'required',
		])) {			// jika ada error
			$validation = \Config\Services::validation();
			return redirect()->to('/film/create/')->withInput()->with('validation', $validation);
		}

		// make slug outomatis from judul
		$slug = url_title($this->request->getVar('judul'), '-', true);
		$this->filmModel->save([
			'judul' => $this->request->getVar('judul'),
			'slug' => $slug,
			'sutradara' => $this->request->getVar('sutradara'),
			'synopsis' => $this->request->getVar('synopsis'),
			'cover' => $this->request->getVar('cover'),
		]);
		session()->setFlashdata('pesan', 'Data has been created successfully ');

		return redirect()->to('/film/movie');
	}

	public function About()
	{
		$data = [
			'title' => "Add Film"
		];
		return view('film/about', $data);
	}

	public function delete($id)
	{
		$this->filmModel->delete($id);
		session()->setFlashdata('pesan', 'Data has been deleted successfully ');

		return redirect()->to('/film/movie');
	}

	public function edit($slug)
	{
		session(); 		// agar pesan error di terima
		$data = [
			'title' => "Update Film",
			'validation' => \Config\Services::validation(),
			'film' => $this->filmModel->getFilm($slug)
		];

		return view('film/edit', $data);
	}

	public function update($id)
	{
		// cek apkah judul masih sama/tidak 
		$filmLama = $this->filmModel->getFilm($this->request->getVar('slug'));
		if ($filmLama['judul'] == $this->request->getVar('judul')) {
			$rule_judul = 'required';
		} else {
			$rule_judul = 'required|is_unique[listfilm.judul]';
		}
		if (!$this->validate([
			'judul' => $rule_judul,
			'sutradara' => 'required',
			'synopsis' => 'required',
			'cover' => 'required',
		])) {			// jika ada error
			$validation = \Config\Services::validation();
			return redirect()->to('/film/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
		}

		$slug = url_title($this->request->getVar('judul'), '-', true);
		$this->filmModel->save([
			'id' => $id,
			'judul' => $this->request->getVar('judul'),
			'slug' => $slug,
			'sutradara' => $this->request->getVar('sutradara'),
			'synopsis' => $this->request->getVar('synopsis'),
			'cover' => $this->request->getVar('cover'),
		]);
		session()->setFlashdata('pesan', 'Data has been updated successfully');

		return redirect()->to('/film/movie');
	}
}
