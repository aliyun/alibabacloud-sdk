// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageprocess20200320.Models
{
    public class DetectLungNoduleRequest : TeaModel {
        [NameInMap("URLList")]
        [Validation(Required=true)]
        public List<DetectLungNoduleRequestURLList> URLList { get; set; }
        public class DetectLungNoduleRequestURLList : TeaModel {
            [NameInMap("URL")]
            [Validation(Required=true)]
            public string URL { get; set; }

        }

    }

}
