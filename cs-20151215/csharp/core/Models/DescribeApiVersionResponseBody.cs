// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class DescribeApiVersionResponseBody : TeaModel {
        [NameInMap("version")]
        [Validation(Required=true)]
        public string Version { get; set; }

        [NameInMap("build")]
        [Validation(Required=true)]
        public string Build { get; set; }

        [NameInMap("docker_version")]
        [Validation(Required=true)]
        public string DockerVersion { get; set; }

        [NameInMap("docker_region_versions")]
        [Validation(Required=true)]
        public string DockerRegionVersions { get; set; }

    }

}
