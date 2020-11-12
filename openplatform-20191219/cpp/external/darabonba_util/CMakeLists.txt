find_package(darabonba_util QUIET)

if(darabonba_util_FOUND)
  message(STATUS "Found darabonba_util version ${darabonba_util_VERSION}")
else()
  message(STATUS "darabonba_util could not be located, Building darabonba_util instead.")
  include(FetchContent)

  FetchContent_Declare(
    _darabonba_util
    GIT_REPOSITORY https://github.com/alibabacloud-sdk-cpp/dara-util.git
    GIT_TAG master
    CMAKE_ARGS
      -DENABLE_UNIT_TESTS:BOOL="0")

  FetchContent_GetProperties(_darabonba_util)
  if(NOT _darabonba_util_POPULATED)
    FetchContent_Populate(_darabonba_util)
    message(STATUS "Added darabonba_util source : ${_darabonba_util_SOURCE_DIR}")
    message(STATUS "Added darabonba_util binary : ${_darabonba_util_BINARY_DIR}")
    add_subdirectory(
      ${_darabonba_util_SOURCE_DIR}
      ${_darabonba_util_BINARY_DIR}
    )
  endif()
  target_include_directories(alibabacloud_open_platform_20191219 PRIVATE "${_darabonba_util_SOURCE_DIR}/include")
endif()
