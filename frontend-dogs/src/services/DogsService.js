import { backendUrl } from 'src/config'

export async function getDogs (url) {
  try {
    const response = await fetch(url)
    if (!response.ok) {
      return []
    } else {
      const data = await response.json()
      return data
    }
  } catch (error) {
    return []
  }
}

export async function getDog (id) {
  try {
    const response = await fetch(`${backendUrl}/dogs/${id}`)
    if (!response.ok) {
      return []
    } else {
      const data = await response.json()
      return data
    }
  } catch (error) {
    return []
  }
}

export async function deleteDogById (id) {
  try {
    const response = await fetch(`${backendUrl}/dogs/delete/${id}`)
    if (!response.ok) {
      return []
    } else {
      return response.ok
    }
  } catch (error) {
    return []
  }
}
