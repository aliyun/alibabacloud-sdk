// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Eci20180808.Models
{
    public class ExecContainerCommandRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ContainerGroupId")]
        [Validation(Required=true)]
        public string ContainerGroupId { get; set; }

        [NameInMap("ContainerName")]
        [Validation(Required=true)]
        public string ContainerName { get; set; }

        [NameInMap("Command")]
        [Validation(Required=true)]
        public string Command { get; set; }

        [NameInMap("TTY")]
        [Validation(Required=false)]
        public bool? TTY { get; set; }

        [NameInMap("Stdin")]
        [Validation(Required=false)]
        public bool? Stdin { get; set; }

    }

}
