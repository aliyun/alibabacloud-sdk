// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class CreateRetcodeAppResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RetcodeAppDataBean")]
        [Validation(Required=true)]
        public CreateRetcodeAppResponseRetcodeAppDataBean RetcodeAppDataBean { get; set; }
        public class CreateRetcodeAppResponseRetcodeAppDataBean : TeaModel {
            [NameInMap("AppId")]
            [Validation(Required=true)]
            public long AppId { get; set; }
            [NameInMap("Pid")]
            [Validation(Required=true)]
            public string Pid { get; set; }
        };

    }

}
