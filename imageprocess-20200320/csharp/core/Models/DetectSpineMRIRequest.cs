// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageprocess20200320.Models
{
    public class DetectSpineMRIRequest : TeaModel {
        [NameInMap("URLList")]
        [Validation(Required=true)]
        public List<DetectSpineMRIRequestURLList> URLList { get; set; }
        public class DetectSpineMRIRequestURLList : TeaModel {
            [NameInMap("URL")]
            [Validation(Required=true)]
            public string URL { get; set; }

        }

    }

}
