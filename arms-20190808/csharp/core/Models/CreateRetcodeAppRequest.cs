// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class CreateRetcodeAppRequest : TeaModel {
        [NameInMap("RetcodeAppName")]
        [Validation(Required=true)]
        public string RetcodeAppName { get; set; }

        [NameInMap("RetcodeAppType")]
        [Validation(Required=true)]
        public string RetcodeAppType { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

    }

}
